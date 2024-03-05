import { menJeans } from './../../Data/Men/men_jeans';
import { Component } from '@angular/core';
import { gounsPage1 } from 'src/Data/Gouns/gouns';
import { lehngaCholiPage2 } from 'src/Data/Saree/lenghaCholiPage2';
import { mensShoesPage1 } from '../../Data/shoes';
import { kurtaPage1 } from 'src/Data/Kurta/kurta';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss'],
})
export class HomeComponent {
  menJeans: any;
  womenGouns: any;
  lenghaCholi: any;
  mensKurta: any;
  mensShoes: any;

  ngOnInit() {
    this.menJeans = menJeans.slice(0, 5);
    this.womenGouns = gounsPage1.slice(0, 5);
    this.lenghaCholi = lehngaCholiPage2.slice(0, 5);
    this.menJeans = mensShoesPage1.slice(0, 5);
    this.mensKurta = kurtaPage1.slice(0, 5);
  }
}
