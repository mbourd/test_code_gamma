import { Component, Input, OnInit } from '@angular/core';
import { IMusicien } from '../../interfaces/musicien';

@Component({
  selector: 'component-musicien',
  templateUrl: './musicien.component.html',
  styleUrls: ['./musicien.component.scss'],
})
export class MusicienComponent implements OnInit {
  @Input() musicien: IMusicien = {
    id: 0,
    label: '',
    dateDebut: '',
    dateSeparation: '',
    fondateur: '',
    paysOrigin: { id: 0, label: '' },
    ville: { id: 0, label: '' },
    genre: { id: 0, label: '' },
  };

  constructor() {}

  ngOnInit(): void {}
}
