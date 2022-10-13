import { Component, OnInit,EventEmitter,Output } from '@angular/core';

@Component({
  selector: 'app-myform',
  templateUrl: './myform.component.html',
  styleUrls: ['./myform.component.css']
})

export class MyformComponent implements OnInit {

    fname =""
    Age = 0;
    add(){
      let newuser :{name:string , age:number} = {name:this.fname,age:this.Age};
      this.myEvent.emit(newuser);

    }

    @Output() myEvent = new EventEmitter();
  // constructor() { }

  ngOnInit(): void {
  }

}
