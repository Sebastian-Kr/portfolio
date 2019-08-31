/////////////////////////////////////////////////////////////////////////////////////////////
// 34, 35, 36, 37. Projekt1-checkout
/////////////////////////////////////////////////////////////////////////////////////////////

class App extends React.Component {
  state = {
    avaliableProduct: 7,
    shoppingCart: 0
  };

  handleRemoveFromCart = () => {
    this.setState({
      shoppingCart: this.state.shoppingCart - 1
    });
  };

  handleAddFromCart = () => {
    this.setState({
      shoppingCart: this.state.shoppingCart + 1
    });
  };

  handleBuy = () => {
    console.log("Kupione");
    this.setState({
      avaliableProduct: this.state.avaliableProduct - this.state.shoppingCart,
      shoppingCart: 0
    });
  };

  render() {
    // destrukturyzacja
    const { shoppingCart, avaliableProduct } = this.state;

    return (
      <>
        <button
          onClick={this.handleRemoveFromCart}
          disabled={shoppingCart === 0 ? true : false}
        >
          -
        </button>
        {/* przykład stylowania w react */}
        <span
          style={
            shoppingCart === 0
              ? { backgroundColor: "red" }
              : { backgroundColor: "green" }
          }
        >
          {this.state.shoppingCart}{" "}
        </span>

        <button
          onClick={this.handleAddFromCart}
          disabled={shoppingCart < avaliableProduct ? false : true}
        >
          +
        </button>
        {/* Operator logiczny -- renderowanie warunkowe */}
        {shoppingCart > 0 && <button onClick={this.handleBuy}>Kup</button>}
      </>
    );
  }
}

ReactDOM.render(<App />, document.getElementById("root"));
