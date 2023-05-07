import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { LayoutMainComponent } from './layouts/Main/main.component';

import { FormsModule, ReactiveFormsModule } from '@angular/forms';

const routes: Routes = [
  {
    path: "",
    component: LayoutMainComponent,
    children: []
  },
  {
    path: "musicien",
    component: LayoutMainComponent,
    loadChildren: () => import("./pages/musicien/musicien.module").then(m => m.MusicienModule),
  },
];

@NgModule({
  imports: [
    FormsModule,
    ReactiveFormsModule,

    RouterModule.forRoot(routes)
  ],
  exports: [RouterModule]
})
export class AppRoutingModule { }
