import { Component, OnInit } from '@angular/core';
import {FormControl, Validators} from '@angular/forms';

@Component({
  selector: 'app-todo-list',
  templateUrl: './todo-list.component.html',
  styleUrls: ['./todo-list.component.scss']
})
export class TodoListComponent implements OnInit {

  todoList = [];
  todoItem = new FormControl('', [Validators.required]);

  constructor() { }

  ngOnInit(): void {
  }

  add() {
    this.todoList.push(this.todoItem.value);
    this.todoItem.reset();
  }
}
