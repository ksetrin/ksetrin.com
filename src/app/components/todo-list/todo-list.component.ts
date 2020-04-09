import {Component, OnInit} from '@angular/core';
import {FormControl, Validators} from '@angular/forms';
import uuidv4 from 'uuid/v4';
import {ToDo} from '../../types/todo';

@Component({
  selector: 'app-todo-list',
  templateUrl: './todo-list.component.html',
  styleUrls: ['./todo-list.component.scss']
})
export class TodoListComponent implements OnInit {

  todoList: ToDo[] = [
    {id: uuidv4(), value: 'test undone', done: false},
    {id: uuidv4(), value: 'test done', done: true},
  ];
  todoItem = new FormControl('', [Validators.required]);

  constructor() {
  }

  ngOnInit(): void {
  }

  add() {
    this.todoList.push({
      id: uuidv4(),
      value: this.todoItem.value,
      done: false
    });
    this.todoItem.reset();
  }

  remove(id: string) {
    this.todoList = this.todoList.filter((t: ToDo) => t.id !== id);
  }

  doneToggle(id: string) {
    this.todoList = this.todoList.map((t: ToDo) => (
      t.id === id
        ? {
          ...t,
          done: !t.done
        }
        : t
      )
    );
  }

}
