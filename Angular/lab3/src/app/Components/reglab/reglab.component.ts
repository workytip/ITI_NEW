import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-reglab',
  templateUrl: './reglab.component.html',
  styleUrls: ['./reglab.component.css']
})
export class ReglabComponent implements OnInit {
  fromparent ='hello from parent to child'
  constructor() { }

  ngOnInit(): void {
  }

  rcvdata:any;
  show(data:any){
    this.rcvdata=data;
  }

}
