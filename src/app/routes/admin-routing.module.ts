import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {AdminLayoutComponent} from '../layouts/admin-layout/admin-layout.component';
import {LoginScreenComponent} from '../screens/admin/login-screen/login-screen.component';
import {DashboardScreenComponent} from '../screens/admin/dashboard-screen/dashboard-screen.component';
import {CreateScreenComponent} from '../screens/admin/create-screen/create-screen.component';

const routes: Routes = [
  {
    path: '', component: AdminLayoutComponent, children: [
      {path: 'login', component: LoginScreenComponent},
      {path: 'dashboard', component: DashboardScreenComponent},
      {path: 'create', component: CreateScreenComponent},
    ]
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class AdminRoutingModule { }
