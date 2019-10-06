import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { DownloadsComponent } from './downloads/downloads.component';
import { HelpAndSupportComponent } from './help-and-support/help-and-support.component';
import { AboutComponent } from './about/about.component';
import { ContactUsComponent } from './contact-us/contact-us.component';


const routes: Routes = [
  {path: "home", component: HomeComponent},
  {path: "downloads", component: DownloadsComponent},
  {path: "help-and-support", component: HelpAndSupportComponent},
  {path: "about-us", component: AboutComponent},
  {path: "contact-us", component: ContactUsComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
