/////////////////////////////////////////////////////////////////////////////////////////////
// 38, 39, 40, 41, 42 Projekt-array example
/////////////////////////////////////////////////////////////////////////////////////////////

const data = {
  users: [
    {
      id: 1,
      age: 29,
      name: "Tomek",
      sex: "male"
    },
    {
      id: 2,
      age: 49,
      name: "Romek",
      sex: "male"
    },
    {
      id: 3,
      age: 44,
      name: "Kaśka",
      sex: "female"
    }
  ]
};

const Item = props => (
  <div>
    <h2>{props.user.name}</h2>
    <p>Info o użytkowniku</p>
    <h4>Wiek {props.user.age} lat</h4>
    <h4>Płec: {props.user.sex}</h4>
  </div>
);

class App extends React.Component {
  state = {
    select: "all"
  };

  usersList = () => {
    let users = this.props.data.users;
    switch (this.state.select) {
      case "all":
        return users.map(user => <Item user={user} key={user.id} />);
      case "female":
        users = users.filter(user => user.sex === "female");
        return users.map(user => <Item user={user} key={user.id} />);
      case "male":
        users = users.filter(user => user.sex === "male");
        return users.map(user => <Item user={user} key={user.id} />);
      default:
        return "brak danych";
    }

    return users;
  };

  handleUsersFilter = option => {
    this.setState({
      select: option
    });
  };

  render() {
    // DZIAŁAJĄCE ROZWIĄZANIE BEZ FILTROWANIA PRZEZ BUTTONY
    // let users = this.props.data.users;

    // // Filtrowanie tablicy i przypisywanie do zmiennnej nowej tablicy
    // users = users.filter(user => user.sex === "female");

    // // Iterujemy po nowo powstałej tablicy
    // const Items = users.map((user, id) => (
    //   <Item key={user.id} content={user} />
    // ));

    return (
      <div>
        <button onClick={this.handleUsersFilter.bind(this, "all")}>
          Wszyscy
        </button>
        <button onClick={this.handleUsersFilter.bind(this, "female")}>
          Kobiety
        </button>
        <button onClick={this.handleUsersFilter.bind(this, "male")}>
          Facetci
        </button>
        {this.usersList()}
        {/* Metoda przedazuje jako wynik coś takiego:  */}
        {/* {[<Item/>, <Item/>, <Item/>]} */}
      </div>
    );
  }
}

ReactDOM.render(<App data={data} />, document.getElementById("root"));
