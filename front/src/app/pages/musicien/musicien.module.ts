import { NgModule } from '@angular/core';
import { MusicienRouterModule } from './musicien-routing.module';
import { MusicienComponent } from 'src/app/components/musicien/musicien.component';
import { ListeMusicienComponent } from './liste/liste-musicien.component';
import { ConsultMusicienComponent } from './consult/consult-musicien.component';
import { ModifierMusicienComponent } from './modifier/modifier-musicien.component';

const COMPONENTS: any[] = [
  MusicienComponent,

  ListeMusicienComponent,
  ConsultMusicienComponent,
  ModifierMusicienComponent
];

@NgModule({
  imports: [MusicienRouterModule],
  declarations: [...COMPONENTS],
})
export class MusicienModule {}
