/////////////////////////////////////////////////////////////////////////////////////////////
// 30, 31, 32, 33. Projekt1-checkbox
/////////////////////////////////////////////////////////////////////////////////////////////
// const PositiveMessage = () => <p>Zapraszamy do zakupów</p>;
// const NegativeMessage = () => <p>Musisz zaakceptować regulamin sklepu</p>;

// Zastępujemy dwa komponenty jednym uniwersalnym

// PRZYKŁAD DESTRUKTURYZACJI - MECHANIZM VANILA JS (ROZPRACOWANIE OBIEKTU NA CZĘŚCI)
const ValidationMessage = props => {
  const { txt } = props;
  // nie trzeba pisać props.txt wystarczy samo txt
  return <p>{txt}</p>;
};

const displayMessage2 = (isConfirmed2, isFormSubmitted2) => {
  console.log("isFormSubmitted2=" + isFormSubmitted2);
  if (isFormSubmitted2) {
    if (isConfirmed2) {
      return <ValidationMessage txt="jest ok" />;
    } else {
      return <ValidationMessage txt="nie jest ok" />;
    }
  } else {
    return null;
  }
};

const FormComponent = props => {
  return (
    <>
      <form onSubmit={props.formSub}>
        <input
          type="checkbox"
          id="age"
          checked={props.isConfirmed3}
          onChange={props.change}
        />
        <label htmlFor="age">Akceptuje regulami sklepu</label>
        <br />
        <button type="submit">Kup bilet</button>
      </form>
    </>
  );
};

class TicketShop extends React.Component {
  state = {
    isConfirmed: false,
    isFormSubmitted: false
  };

  handleCheckbox = () => {
    this.setState({
      isConfirmed: !this.state.isConfirmed,
      isFormSubmitted: false
    });
    console.log(this.state.isConfirmed);
  };

  handleFormSubmiit = e => {
    console.log("handleFormSubmit");
    e.preventDefault();
    if (!this.state.isFormSubmitted) {
      console.log("handleFromSubmit => change");

      this.setState({
        isFormSubmitted: true
      });
      console.log("isFormSubmitted=" + this.state.isFormSubmitted);
      // debugger;
    }
  };

  displayMessage = () => {
    console.log("isFormSubmitted2=" + this.state.isFormSubmitted);
    if (this.state.isFormSubmitted) {
      if (this.state.isConfirmed) {
        return <ValidationMessage txt="jest ok" />;
      } else {
        return <ValidationMessage txt="nie jest ok" />;
      }
    } else {
      return null;
    }
  };

  render() {
    // PRZYKŁAD DESTRUKTURYZACJI - MECHANIZM VANILA JS (WARTO KORZYSTAĆ)
    // rozbija obiekt na pojedyncze zmienne - skraca zapis
    // isConfirmed zamiast this.state.isConfirmed

    const { isConfirmed, isFormSubmitted } = this.state;

    return (
      <>
        <h1>Kup bilet</h1>

        <FormComponent
          change={this.handleCheckbox}
          formSub={this.handleFormSubmiit}
          isConfirmed3={this.state.isConfirmed}
        />

        {/* wewnętrzna metoda -- DZIAŁA*/}
        {/* {this.displayMessage()} */}

        {/* zewnętrzny komponent -- NIE CHCE DZIAŁAĆ */}
        {displayMessage2(isFormSubmitted, isConfirmed)}
      </>
    );
  }
}

ReactDOM.render(<TicketShop />, document.getElementById("root"));
