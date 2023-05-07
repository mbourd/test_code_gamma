import { ICountry } from "./country";
import { IGenre } from "./genre";
import { IVille } from "./ville";

export interface IMusicien {
  id: Number;
  label: string;
  dateDebut: string;
  dateSeparation?: string;
  fondateur: string;
  nombreMembre?: Number;
  presentation?: string;
  paysOrigin: ICountry;
  ville: IVille;
  genre: IGenre;
}