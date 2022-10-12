import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { FirstComponent } from './Components/First/first.component';
import { SecondComponent } from './Components/second/second.component';
import { ReglabComponent } from './Components/reglab/reglab.component';
import { HomeComponent } from './Components/home/home.component';
import { MyformComponent } from './Components/myform/myform.component';
@NgModule({
  declarations: [
    AppComponent,
    FirstComponent,
    SecondComponent,
    ReglabComponent,
    HomeComponent,
    MyformComponent
  ],
  imports: [
    BrowserModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
