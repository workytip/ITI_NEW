import { Component } from "@angular/core";

@Component({
    selector:'app-first',
    templateUrl:'./first.component.html',
    styleUrls:['./first.component.css']

})

export class FirstComponent
{

     count =0;
     time:any;
     myimg ='assets/Images/1.jpg'
     imgarr=['assets/Images/1.jpg','assets/Images/2.jpg','assets/Images/3.jpg','assets/Images/4.jpg','assets/Images/5.jpg'];
     
     next(){
   
          if(this.count <this.imgarr.length){
            this.myimg = this.imgarr[this.count];
            this.count++;
          }
            return this.myimg;
     }
     prev(){
       
        if(this.count > 1){
            this.count--;
          this.myimg = this.imgarr[this.count-1];
            
                         }
          return this.myimg;
         }

   autoslide(){
   this.time= setInterval(()=>{
        if(this.count <this.imgarr.length){
          this.myimg = this.imgarr[this.count];
          this.count++;
        }
        else{
            this.count = 0;
        }
          return this.myimg;
    }     
        ,1000);
}

stop(){
    clearInterval(this.time);
}

slide(){
    if(this.count <this.imgarr.length){
      this.myimg = this.imgarr[this.count];
      this.count++;
    }
    else{
        this.count = 0;
    }
      return this.myimg;
}
}
