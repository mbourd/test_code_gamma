<?php


use App\Entity\Musicien;
use App\Form\MusicienType;
use App\Repository\musicienRepository;
use App\Services\CountryService;
use App\Services\GenreService;
use App\Services\MusicienService;
use App\Services\VilleService;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Request\ParamFetcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/** *
 * @Rest\Route("/musicien")
 */
class MusicienController extends AbstractFOSRestController
{
    /**
     * @Rest\Get("/all")
     */
    public function all(MusicienService $musicienService)
    {
        return $musicienService->getAll();
    }

    /**
     * @Rest\Get("/show")
     * @Rest\QueryParam(name="id")
     */
    public function show(ParamFetcher $paramFetcher, MusicienService $musicienService)
    {
        $id = $paramFetcher->get('id');

        $musicien = $musicienService->getById($id);

        if ($musicien == null) {
            throw new Exception('Entité non trouvé');
        }
        return $musicien;
    }

    /**
     * @Rest\Get("/update")
     * @Rest\QueryParam(name="id")
     * @Rest\QueryParam(name="label")
     * @Rest\QueryParam(name="dateDebut")
     * @Rest\QueryParam(name="dateSeparation")
     * @Rest\QueryParam(name="fondateur")
     * @Rest\QueryParam(name="nombreMembre")
     * @Rest\QueryParam(name="presentation")
     * @Rest\QueryParam(name="idPayOrigine")
     * @Rest\QueryParam(name="idVille")
     * @Rest\QueryParam(name="idGenre")
     */
    public function update(ParamFetcher $paramFetcher, MusicienService $musicienService, CountryService $countryService, VilleService $villeService, GenreService $genreService)
    {
        $id = $paramFetcher->get('id');

        if ($musicienService->getById($id) == null) {
            throw new Exception('Entité non trouvé');
        }

        $label = $paramFetcher->get('label');
        $dateDebut = $paramFetcher->get('dateDebut');
        $dateSeparation = $paramFetcher->get('dateSeparation');
        $fondateur = $paramFetcher->get('fondateur');
        $nombreMembre = $paramFetcher->get('nombreMembre');
        $presentation = $paramFetcher->get('presentation');
        $country = $countryService->getById($paramFetcher->get('idPaysOrigine'));
        $ville = $villeService->getById($paramFetcher->get('idVille'));
        $genre = $genreService->getById($paramFetcher->get('idGenre'));
        $data = [
            'label' => $label,
            'dateDebut' => $dateDebut,
            'dateSeparation' => $dateSeparation,
            'fondateur' => $fondateur,
            'nombreMembre' => $nombreMembre,
            'presentation' => $presentation,
            'country' => $country,
            'ville' => $ville,
            'genre' => $genre
        ];

        $form = $this->createForm(MusicienType::class, null, ['method' => 'PUT', 'csrf_protection' => false]);

        $form->submit($data, true);

        if (!$form->isValid()) {
            throw new Exception($form->getErrors(true, true));
        }

        return $musicienService->updateMusicien($id, $data);
    }

    /**
     * @Rest\Get("/delete")
     * @Rest\QueryParam(name="id")
     */
    public function delete(ParamFetcher $paramFetcher, MusicienService $musicienService)
    {
        $id = $paramFetcher->get('id');

        if ($musicienService->getById($id) == null) {
            throw new Exception('Entité non trouvé');
        }

        return $musicienService->deleteMusicien($id);
    }
}
