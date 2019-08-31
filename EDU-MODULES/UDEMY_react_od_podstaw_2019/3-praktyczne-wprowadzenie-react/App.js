// 8, 9
// komponent funkcyjny, bezstanowy
/////////////////////////////////////////////////////////////////////////////////////////////

const Header = () => {
  return (
    <div>
      <h1>Komponent funkcyjny Header</h1>
    </div>
  );
};

// komponent klasowy, stanowy
/////////////////////////////////////////////////////////////////////////////////////////////

class Blog extends React.Component {
  // po zmianie state renderuje się komponent na stronie od nowa
  state = {
    number: 0
  };
  // metoda render jest wymagana
  render() {
    return (
      <section>
        {/* komentarz przykładowy */}
        <h2>Komponent klasowy blog {this.state.number}</h2>
      </section>
    );
  }
}

const App = () => {
  return (
    <>
      <Header />
      <Blog />
    </>
  );
};

ReactDOM.render(<App />, document.getElementById("root"));

/////////////////////////////////////////////////////////////////////////////////////////////
// 10. / 11. KOMPONENTY STATE PROPS
/////////////////////////////////////////////////////////////////////////////////////////////

class ShoppingList extends React.Component {
  state = {
    items1: "ogórki",
    items2: "sok",
    items3: "coś do picia"
  };

  render() {
    return (
      <>
        <h1>Lista zakupów</h1>
        <ul>
          <ItemNoState name={this.state.items2} example={2} />
          <ItemList name={this.state.items1} example={2 + 2} />
        </ul>
      </>
    );
  }
}

// komponent podrzędny bezstanowy/funkcyjny
const ItemNoState = props => {
  return (
    <li>
      {/* bez this bo "props" to argument tej funkcji  (nazwa dowolna ale przekazujemy propsy także ;)  */}
      {props.name} {props.example}
    </li>
  );
};

// komponent podrzędnystanowy/klasowy
class ItemList extends React.Component {
  render() {
    return (
      <li>
        {/* w klasie musi być dopisane this.... propsy są przekazywane z nadrzędnego kompoenntu */}
        {this.props.name} - {this.props.example}
      </li>
    );
  }
}

ReactDOM.render(<ShoppingList />, document.getElementById("root2"));

/////////////////////////////////////////////////////////////////////////////////////////////
// 12, 13, 14 ADD SIGN  -- apka dodająca znak A na koncu stringa po przyciśnięciu
/////////////////////////////////////////////////////////////////////////////////////////////

class AddSign extends React.Component {
  // starsza pełna wersja
  // constructor(props) {
  //   // super odpowiada za przekazanie podstawowych metod komponentu głównego
  //   super(props);
  //   this.state = {
  //     text: ""
  //   };
  // }

  // uproszczona wersja

  state = {
    text: "A=",
    numberRandom: "Number=",
    btntext: "nowy"
  };

  // funkcja strzałkowa, nie normlana bo:
  // 1. this - undefind, bo normalna funkcja tworzy nowe this
  //    funkcja strzałkowa dziedziczy this z wyższego poziomu - z obiektu
  // 2.
  handleClick = () => {
    console.log("test klika");
    console.log(this.state.text);
    // w ten sposób zmienia sie tylko this.state, ale nie komponent nie renderuje się
    // this.state.text += "a";
    const letter = "a";
    const randomNumber = Math.floor(Math.random() * 10);

    this.setState({ text: this.state.text + letter });
    this.setState({ numberRandom: this.state.numberRandom + randomNumber });
    // zmienia się tylko element który ma się zmienić -- taka optymalizacja React
  };

  render() {
    return (
      <React.Fragment>
        <button onClick={this.handleClick}>
          {/* trzy sposoby przekazywania wartości do tekstu na buttonie */}
          {this.props.btnTitle} {this.state.btntext} element
        </button>
        {/* przkazujemy atrypbuty - propsy do innego komponentu */}
        <PanelResult
          mytext={this.state.text}
          numberRandom={this.state.numberRandom}
        >
          bbb
        </PanelResult>
      </React.Fragment>
    );
  }
}

// funkcja strzałkowa z parametrem "props" -- konwencja nazewnictwa
const PanelResult = props => {
  return (
    <>
      <h1>
        {props.mytext} : {props.children}
      </h1>
      <h2>{props.numberRandom}</h2>
    </>
  );
};

ReactDOM.render(<AddSign btnTitle="dodaj" />, document.getElementById("root3"));

/////////////////////////////////////////////////////////////////////////////////////////////
// 15, 16 - tekst bezpośrednio z inputa
/////////////////////////////////////////////////////////////////////////////////////////////

class InputDynamic extends React.Component {
  // UWAGA -- STATE ZMIENIA SIĘ W TRAKCIE RENDEROWANIA
  // ASYNCHRONICZNIE (ZAZWYCZAJ RENDER ZADZIAŁĄ WCZEŚNIEJ NIŻ ODŹWIEZY SIĘ STATE)
  state = {
    value: ""
  };

  // handle -- konwencja nazewnictwa
  // to samo w formie funkcji strzałkowiej
  // handleInputChange = (e) => {

  handleInputChange(e) {
    console.log(e.target.value);
    // to nie zadziała
    // this.state.value = e.target.value;
    this.setState({
      value: e.target.value
    });
  }

  hendleResetClick = () => {
    this.setState({
      value: ""
    });
  };

  render() {
    return (
      <React.Fragment>
        {/* Dajemy bind żeby THIS w metodzie handleInputChange było tym saymym co THIS komponentu */}
        {/* inny sposób to zrobić handleInputChange przez funkcję strzałkową */}
        <input
          value={this.state.value}
          onChange={this.handleInputChange.bind(this)}
          type="text"
        />
        <button onClick={this.hendleResetClick}>Reset</button>
        <h1>{this.state.value}</h1>
      </React.Fragment>
    );
  }
}

ReactDOM.render(<InputDynamic />, document.getElementById("root4"));
/////////////////////////////////////////////////////////////////////////////////////////////
// 17,18 - przycisk pokaż / ukryj
/////////////////////////////////////////////////////////////////////////////////////////////
<div id="root5" />;

class Message extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      massageIsActive: false
    };
    // stworzyliśmy nową metodę o takiej samej nazwie
    // dodatkowo zbindowaliśmy this żeby było takie samo jak w klasie
    this.handleMassageButton = this.handleMassageButton.bind(this);
  }

  handleMassageButton() {
    // zatrzymuje wykonanie kodu i odpala debugger
    // debugger;
    //   this.setState({
    //   massageIsActive: !this.state.massageIsActive
    // });

    // robi to samo...dobrze jest korzystać z funkcji strzałkowej i "prevState" zamiast obiektu
    // w takim małym projkecie nie ma to znaczenia
    this.setState(prevState => ({
      massageIsActive: !prevState.massageIsActive
    }));
  }

  render() {
    const text =
      "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugiat, odit.";
    console.log(this.state.massageIsActive);

    return (
      <>
        <button onClick={this.handleMassageButton}>
          {/* operator trójargumentowy (warunek ? prawda:fałsz) */}
          {this.state.massageIsActive ? "Ukryj" : "Pokaż"}
        </button>
        {/* operator jakiś logiczny ... jakiś inny .... jak warunek jest ok sprawdza drugą i wyświetla */}
        <p>{this.state.massageIsActive && text}</p>
        {/* to samoe zapisane w wyrażeniu trójargumentowym */}
        {this.state.massageIsActive ? <p>{text}</p> : null}
        {/* jeszcze inny sposób na zrobienie tego samego */}
        {this.state.massageIsActive && <p>{text}</p>}
      </>
    );
  }
}

ReactDOM.render(<Message />, document.getElementById("root5"));

/////////////////////////////////////////////////////////////////////////////////////////////
// 19,20,21 - zliczanie kliknięć
/////////////////////////////////////////////////////////////////////////////////////////////

class Counter extends React.Component {
  state = {
    count: 0,
    // odczytujemy wartość startową z propsów
    result: this.props.result
  };

  handleMathClick = (type, number) => {
    // debugger;
    if (type === "substraction") {
      this.setState(prevState => ({
        count: prevState.count + 1,
        result: prevState.result - number
      }));
    } else if (type === "reset") {
      this.setState(prevState => ({
        count: prevState.count + 1,
        result: 0
      }));
    } else if (type === "addition") {
      // debugger;
      this.setState(prevState => ({
        count: prevState.count + 1,
        result: prevState.result + number
      }));
    } else {
      console.log("NIEZROZUMIALE WARTOSCI");
    }
  };

  render() {
    return (
      <>
        {/* <button onClick={this.handleMathClick.bind(this, "addition", 1)}>+1</button> */}
        {/* <button onClick={this.handleMathClick.bind(this, "substraction", 1)}>-1</button> */}
        {/* inny sposób wywołania funkcji z parametrami */}
        {/* <button onClick={() => this.handleMathClick("substraction", 10)}>-10</button> */}
        {/* <button onClick={this.handleMathClick.bind(this, "reset")}>Reset wyniku</button> */}

        {/* OPTYMALIZACJA KODU -- wyrzuczamy buttony do jednego komponentu podrzędnego */}

        {/* przekazujemy wszystkie parametry razem z funkcją handleMathClick */}
        <MathButton
          name="odejmij 1"
          number="1"
          type="substraction"
          click={this.handleMathClick}
        />
        <MathButton
          name="odejmij 10"
          number="10"
          type="substraction"
          click={this.handleMathClick}
        />
        <MathButton
          name="dodaj 10"
          number="1"
          type="addition"
          click={this.handleMathClick}
        />
        <MathButton name="Resetuj" type="reset" click={this.handleMathClick} />

        <ResultPanel count={this.state.count} result={this.state.result} />
      </>
    );
  }
}

// komponent bezstanowy
const ResultPanel = props => {
  return (
    <>
      <h2>
        Liczba kliknięć: {props.count}
        {props.count > 10 ? <span> Przeciązenie procka!</span> : null}
      </h2>
      <h2>Wynik: {props.result}</h2>
    </>
  );
};

// komponent bezstanowy
const MathButton = props => {
  // console.log(props);
  // zmieniamy stringa na typ number
  const number = parseInt(props.number);

  return (
    <button onClick={() => props.click(props.type, number)}>
      {props.name}
    </button>
  );
};
// Wywołanie komponentu z przkazaniem propsów
// w przypadku 0 trzeba byłoby napisać {10} zamist "10" bo inaczej będzie string zamiast liczby
ReactDOM.render(<Counter result={10} />, document.getElementById("root6"));
