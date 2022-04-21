import React, {useState} from 'react';
import './App.css';
import Input_Field from './Input_Field';
import Submit_Button from './Submit_Button';
import TodoList from './TodoList';



function App() {

const [todos, setTodos] = useState([
  {id: 1, content: "My first todo", checked: false},
  {id: 2, content: "Mysecond todo", checked: false}
]);

  return (
    <div>
      <Input_Field/>
      <TodoList/>
      <Submit_Button/>
    </div>

  );
}

export default App;
