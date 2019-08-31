/////////////////////////////////////////////////////////////////////////////////////////////
// 51 - modul losowania
/////////////////////////////////////////////////////////////////////////////////////////////




class RandomModule extends React.Component {
  state = {

    randomTable: [
      "Losowa pozycja 1",
      "Losowa pozycja 2",
      "Losowa pozycja 3",
    ],

    currentValue: "",
    inputValue: "",

  };


  handleRandomClick = e => {
    var items = this.state.randomTable;
    console.log(items);
    const randomValue = items[Math.floor(Math.random() * items.length)];

    this.setState({
      currentValue: randomValue
    });

  };

  // ZADANIE NA 6

  handleInputChange = e => {
    console.log(e.target.value);
    this.setState({
      inputValue: e.target.value
    })
  }

  handleAddPositionCLick = e => {
    const { inputValue } = this.state;


    if (inputValue != "") {

      // // uwaga :robimy kopie a nie referencję!!!

      // Można zrobić to na dwa sposoby: 
      //  1. Metoda push:
      // const randomTableNew = [...this.state.randomTable];
      // randomTableNew.push(inputValue);
      // 2. Metoda concat
      const randomTableNew = this.state.randomTable.concat(this.state.inputValue);


      this.setState({
        randomTable: randomTableNew,
        inputValue: ""
      })

      // METODA setState jest asynchroniczna ... generuje dopiero w momencie renderowania
      console.log(this.state.randomTable);
      console.log(randomTableNew);
    }

    else {
      alert('Wpisz nową wartość')
    }


  }



  render() {


    return (

      <div>
        <button onClick={this.handleRandomClick}>Losuj</button>
        <label>
          <input value={this.state.inputValue} onChange={this.handleInputChange}></input>
          <button onClick={this.handleAddPositionCLick}>Dodaj pozycję</button>
        </label>
        {this.state.currentValue ? <h5>{this.state.currentValue}</h5> : null}
      </div>

    );
  }
}

ReactDOM.render(<RandomModule />, document.getElementById("root"));
