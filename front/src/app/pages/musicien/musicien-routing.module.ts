import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ListeMusicienComponent } from './liste/liste-musicien.component';
import { ConsultMusicienComponent } from './consult/consult-musicien.component';
import { ModifierMusicienComponent } from './modifier/modifier-musicien.component';

const routes: Routes = [
  {
    path: '',
    component: ListeMusicienComponent,
    data: { title: 'Liste des musiciens' },
  },
  {
    path: '/:id/consult',
    component: ConsultMusicienComponent,
    data: { title: 'Consultation' },
  },
  {
    path: '/:id/modifier',
    component: ModifierMusicienComponent,
    data: { title: 'Modification' },
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  providers: [],
  exports: [RouterModule],
})
export class MusicienRouterModule { }