import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-reglab',
  templateUrl: './reglab.component.html',
  styleUrls: ['./reglab.component.css']
})
export class ReglabComponent implements OnInit {
  constructor() { }

  ngOnInit(): void {
  }

   allusers:{name:string , age:number}[]=[];

  show(data:{name:string , age:number}){
    this.allusers.push(data);
  }

}
