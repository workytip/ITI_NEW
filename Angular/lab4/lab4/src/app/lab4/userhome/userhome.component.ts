import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup, Validators } from '@angular/forms';

@Component({
  selector: 'app-userhome',
  templateUrl: './userhome.component.html',
  styles: [
  ]
})
export class UserhomeComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
  }

  myvalid = new FormGroup({
    name:new FormControl('',[Validators.minLength(3),Validators.required]),
    age: new FormControl('',[Validators.min(20),Validators.max(40),Validators.required]),
    email:new FormControl('',[Validators.email,Validators.required])
  })

  get validname(){
    return this.myvalid.controls.name.valid;
  }

  get validage(){
    return this.myvalid.controls.age.valid;
  }

  get validmail(){
    return this.myvalid.controls.email.valid;
  }
}
