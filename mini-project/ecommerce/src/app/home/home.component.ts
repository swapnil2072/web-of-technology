import { menJeans } from './../../Data/Men/men_jeans';
import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss'],
})
export class HomeComponent {
  menJeans: any;
  ngOnInit(){
    this.menJeans = menJeans.slice(0,5)
  }
}
