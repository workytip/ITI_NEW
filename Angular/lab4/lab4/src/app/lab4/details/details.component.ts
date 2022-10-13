import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-details',
  templateUrl: './details.component.html',
  styles: [
  ]
})
export class DetailsComponent implements OnInit {

  id:number =0;
  constructor(acv:ActivatedRoute) {
    this.id = acv.snapshot.params['id'];
   }

  ngOnInit(): void {
  }

}
