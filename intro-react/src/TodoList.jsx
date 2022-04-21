import React, { useState } from "react";

export default function TodoList() {
  const initialTodos = ["My first todo", "My second todo"];
  const [todos, setTodos] = useState(initialTodos); 
  return (
    <ul>
      {todos.map((todo) => (
        <li key={todo}>
          <input type="checkbox" /> {todo}
        </li>
      ))}
    </ul>
  );
}
// handleChange = () => {
//     props.todos.onChange({ checked: !props.todos.checked });
//  }
