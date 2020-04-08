import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import {AdminLayoutComponent} from '../layouts/admin-layout/admin-layout.component';
import {AdminRoutingModule} from '../routes/admin-routing.module';
import {LoginScreenComponent} from '../screens/admin/login-screen/login-screen.component';

@NgModule({
  declarations: [
    AdminLayoutComponent,
    LoginScreenComponent,
  ],
  imports: [
    CommonModule,
    AdminRoutingModule,
  ],
})
export class AdminModule {}
