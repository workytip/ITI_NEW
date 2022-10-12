import { Component, OnInit,EventEmitter,Output } from '@angular/core';

@Component({
  selector: 'app-myform',
  templateUrl: './myform.component.html',
  styleUrls: ['./myform.component.css']
})

export class MyformComponent implements OnInit {

    fname =""
    Age = 0;
    allusers:{name:string , age:number}[]=[];
    add(){
      let newuser :{name:string , age:number} = {name:this.fname,age:this.Age};
      // newuser.name=this.fname; ??
      this.allusers.push(newuser);
      // console.log(this.allusers);
      this.myEvent.emit(this.allusers);

    }

    @Output() myEvent = new EventEmitter();
  // constructor() { }

  ngOnInit(): void {
  }

}
