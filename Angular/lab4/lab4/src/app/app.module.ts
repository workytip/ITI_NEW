import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { FirstComponent } from './Components/First/first.component';
import { SecondComponent } from './Components/second/second.component';
import { ReglabComponent } from './Components/reglab/reglab.component';
import { HomeComponent } from './Components/home/home.component';
import { MyformComponent } from './Components/myform/myform.component';
import { ProfileComponent } from './lab4/profile/profile.component';
import { DetailsComponent } from './lab4/details/details.component';
import { ErrorComponent } from './lab4/error/error.component';
import { HeaderComponent } from './lab4/header/header.component';
import { UserhomeComponent } from './lab4/userhome/userhome.component';
import { RouterModule, Routes } from '@angular/router';

let routs:Routes =[
  {path:'',component:UserhomeComponent},
  {path:'profile',component:ProfileComponent},
  {path:'details/:id',component:DetailsComponent},
  {path:'**',component:ErrorComponent}
];

@NgModule({
  declarations: [
    AppComponent,
    FirstComponent,
    SecondComponent,
    ReglabComponent,
    HomeComponent,
    MyformComponent,
    ProfileComponent,
    DetailsComponent,
    ErrorComponent,
    HeaderComponent,
    UserhomeComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    RouterModule.forRoot(routs),
    ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
