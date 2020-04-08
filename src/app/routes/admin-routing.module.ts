import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {AdminLayoutComponent} from '../layouts/admin-layout/admin-layout.component';
import {LoginScreenComponent} from '../screens/admin/login-screen/login-screen.component';


const routes: Routes = [
  {
    path: '', component: AdminLayoutComponent, children: [
      {path: 'login', component: LoginScreenComponent},
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AdminRoutingModule { }
