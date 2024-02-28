import { Component } from '@angular/core';
import { homeCarouselData } from '../../../Data/mainCarousel';
import { RouterModule } from '@angular/router';
import { CommonModule } from '@angular/common';
@Component({
  selector: 'app-main-carousel',
  standalone: true,
  imports: [CommonModule, RouterModule],
  templateUrl: './main-carousel.component.html',
  styleUrl: './main-carousel.component.scss',
})
export class MainCarouselComponent {
  carouselData: any;

  currentSlide = 0;
  interval: any;

  ngOnInit() {
    this.carouselData = homeCarouselData;
  }

  autoPlay() {
    setInterval(() => {
      this.nextSlide();
    }, 2000);
  }

  nextSlide() {
    this.currentSlide = (this.currentSlide + 1) % this.carouselData.length;
  }
}
