/////////////////////////////////////////////////////////////////////////////////////////////
// 43, 44, 45, 46 Projekt-Interactive menu
/////////////////////////////////////////////////////////////////////////////////////////////
class App extends React.Component {
  state = {
    items: [
      { id: 1, content: "herbata", active: true },
      { id: 2, content: "woda", active: true },
      { id: 3, content: "zupa", active: false },
      { id: 4, content: "ziemniaki", active: true },
      { id: 5, content: "chleb", active: false },
      { id: 6, content: "kasza", active: false }
    ]
  };

  handleChangeStatus = id => {
    console.log("działa");
    console.log("Kliknięty: " + id);
    const items = this.state.items.map(item => {
      if (id === item.id) {
        item.active = !item.active;
      }
      return item;
    });
    this.setState({
      items: items
    });
  };

  render() {
    return (
      <React.Fragment>
        <Header items={this.state.items} />
        <ListItems
          items={this.state.items}
          changeStatus={this.handleChangeStatus}
        />
      </React.Fragment>
    );
  }
}
