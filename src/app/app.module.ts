import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './routes/app-routing.module';
import { AppComponent } from './app.component';
import { MainLayoutComponent } from './layouts/main-layout/main-layout.component';
import { HomeScreenComponent } from './screens/user/home-screen/home-screen.component';
import { PostScreenComponent } from './screens/user/post-screen/post-screen.component';
import { PageNotFoundComponent } from './screens/page-not-found/page-not-found.component';
import { PostPreviewComponent } from './components/post-preview/post-preview.component';
import { TodoListComponent } from './components/todo-list/todo-list.component';
import {ReactiveFormsModule} from '@angular/forms';

@NgModule({
  declarations: [
    AppComponent,
    MainLayoutComponent,
    HomeScreenComponent,
    PostScreenComponent,
    PageNotFoundComponent,
    PostPreviewComponent,
    TodoListComponent,
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
