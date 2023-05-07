import { NgModule } from '@angular/core';
import { MusicienRouterModule } from './musicien-routing.module';

const COMPONENTS: any[] = [];

@NgModule({
  imports: [MusicienRouterModule],
  declarations: [...COMPONENTS],
})
export class MusicienModule {}
