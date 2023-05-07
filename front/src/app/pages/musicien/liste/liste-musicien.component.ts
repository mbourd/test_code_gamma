import { Component, OnInit } from '@angular/core';
import { IMusicien } from 'src/app/interfaces/musicien';
import { MusicienService } from 'src/app/services/musicien.service';

@Component({
  selector: 'app-liste-musicien',
  templateUrl: './liste-musicien.component.html',
  styleUrls: ['./liste-musicien.component.scss'],
})
export class ListeMusicienComponent implements OnInit {
  listMusicien: IMusicien[] = [];

  constructor(private musicienService: MusicienService) {}

  ngOnInit(): void {
    this.musicienService.getMusicienAll().subscribe(
      (reponse: any) => {
        this.listMusicien = reponse;
      },
      (error) => {}
    );
  }
}
