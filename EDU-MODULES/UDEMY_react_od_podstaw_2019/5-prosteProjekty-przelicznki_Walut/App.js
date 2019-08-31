/////////////////////////////////////////////////////////////////////////////////////////////
// 49-50 Projekt-przelicznik Walut
/////////////////////////////////////////////////////////////////////////////////////////////
const Waluta1 = props => {
  return (
    <div>
      Wartość waluta1:{" "}
      {props.cash <= 0 ? "" : (props.cash / props.ratio ).toFixed(2)}{" "}
    </div>
  );
};

const Cash = props => {
  return (
    <div>
      {" "}
      {props.title}{" "}
      {props.cash <= 0 ? "" : (props.cash / props.ratio * props.price).toFixed(2)}{" "}
    </div>
  );
};

class ExchangerCounter extends React.Component {
  state = {
    amount: "",
    product: "gas"
  };

  static defaultProps =  {
    currencies: [
      {
        id: 1,
        name: "dollar",
        ratio: 3.6,
        title: "Watość w dolarach:"
      },
      {
        id: 2,
        name: "euro",
        ratio: 4.2,
        title: "Watość w euro:"
      },
      {
        id: 3,
        name: "pound",
        ratio: 5.6,
        title: "Watość w funtach:"
      }
    ],

    prices: {
      electricity: 0.51,
      gas: 4.8,
      oranges: 3.79
    }
  }



  handleChange = e => {
    this.setState({
      amount: e.target.value
    });
  };
  handleSelect = e => {
    this.setState({
      product: e.target.value
    });
  };

  insertSufix(select) {
    if (select === "electricity") {
      return <em>kwh</em>
    }
    else if (select === "gas") {
      return <em>litry</em>
    }
    else if (select === "oranges") {
      return <em>kg</em>
    }
    else return null
  };

  selectPrice(select) {
    // console.log(this.props.prices[select]);
    const price = this.props.prices[select];
    console.log(price);
  return price
  }

  render() {
    const { amount, product } = this.state;
    const calculators = this.props.currencies.map(currency => (
      <Cash
        key={currency.id}
        ratio={currency.ratio}
        title={currency.title}
        cash={amount}
        price={this.selectPrice(product)}
      />
    ));
    return (
      <div className="app">
        <h4> Kantor </h4>
        <label>
          Wybierz produkt: <br />
          <br />
          <select value={product} onChange={this.handleSelect}>
            <option value="electricity"> Prąd </option>
            <option value="gas"> Benzyna </option>
            <option value="oranges"> Pomarańcze </option>
          </select>
        </label>
        <br />
        <br />
        <label>
          <input
            type="number"
            value={this.state.amount}
            onChange={this.handleChange}
          />
          {this.insertSufix(this.state.product)}
        </label>
        <br />
        <br /> {calculators}
      </div>
    );
  }
}

ReactDOM.render(<ExchangerCounter />, document.getElementById("root"));
