/////////////////////////////////////////////////////////////////////////////////////////////
// 38, 39, 40, 41, 42 Projekt-array example
/////////////////////////////////////////////////////////////////////////////////////////////

class App extends React.Component {
  state = {
    items: ["jabłko", "śliwka", "gruszka"]
  };

  render() {
    return (
      <>
        <ul>
          {this.state.items.map(item => (
            <li key={item}>{item}</li>
          ))}
        </ul>
      </>
    );
  }
}

ReactDOM.render(<App />, document.getElementById("root"));
