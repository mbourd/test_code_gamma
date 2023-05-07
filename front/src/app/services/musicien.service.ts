import { Injectable } from '@angular/core';
import { HttpClient, HttpParams } from '@angular/common/http';
import { Observable } from 'rxjs/internal/Observable';
import { environment } from 'src/environments/environment';

@Injectable({ providedIn: 'root' })
export class MusicienService {
  private baseUrl = environment.API_URL;

  constructor(private http: HttpClient) {}

  getMusicienAll(): Observable<Object> {
    return this.http.get(this.baseUrl + '/musicien/all', {
      params: {},
    });
  }

  getMusicien(data: any): Observable<Object> {
    return this.http.get(this.baseUrl + '/musicien/show', {
      params: { ...data },
    });
  }

  putMusicien(params: any): Observable<Object> {
    return this.http.put(`${this.baseUrl}/musicien/update`, params);
  }

  deleteMusicien(data: any): Observable<Object> {
    return this.http.delete(this.baseUrl + '/musicien/delete', {
      params: { ...data },
    });
  }
}
