import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {AdminLayoutComponent} from '../layouts/admin-layout/admin-layout.component';
import {AdminRoutingModule} from '../routes/admin-routing.module';
import {LoginScreenComponent} from '../screens/admin/login-screen/login-screen.component';
import {CreateScreenComponent} from '../screens/admin/create-screen/create-screen.component';
import {DashboardScreenComponent} from '../screens/admin/dashboard-screen/dashboard-screen.component';

@NgModule({
  declarations: [
    AdminLayoutComponent,
    LoginScreenComponent,
    CreateScreenComponent,
    DashboardScreenComponent,
  ],
  imports: [
    CommonModule,
    AdminRoutingModule,
  ],
})
export class AdminModule {}
