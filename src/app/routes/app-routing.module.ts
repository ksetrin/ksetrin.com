import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import {MainLayoutComponent} from '../layouts/main-layout/main-layout.component';
import {HomeScreenComponent} from '../screens/user/home-screen/home-screen.component';
import {PostScreenComponent} from '../screens/user/post-screen/post-screen.component';
import {PageNotFoundComponent} from '../screens/page-not-found/page-not-found.component';


const routes: Routes = [
  {
    path: '', component: MainLayoutComponent, children: [
      // {path: '', redirectTo: '/', pathMatch: 'full'},
      {path: '', component: HomeScreenComponent},
      {path: 'post/:id', component: PostScreenComponent},
    ]
  },
  {
    path: 'admin', loadChildren: () => import('../modules/admin.module').then(m => m.AdminModule),
  },
  { path: '**', component: PageNotFoundComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
