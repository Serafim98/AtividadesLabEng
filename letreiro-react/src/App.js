import React from "react";
import Typed from "react-typed";
import "./App.css";

function App() {
  return (
    <div className="app">
      <div className="container">
        <h1 className="title">React Typing Animation Effect</h1>{" "}
      </div>
      <div className="animated-typing">
        <Typed
          strings={[
            "Venha estudar na Fatec"
          ]}
          typeSpeed={150}
          backSpeed={100}
          loop
        />
      </div>
    </div>
  );
}

export default App;