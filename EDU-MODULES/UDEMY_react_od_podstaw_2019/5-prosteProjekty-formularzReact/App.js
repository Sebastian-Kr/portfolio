/////////////////////////////////////////////////////////////////////////////////////////////
// 47-48 Projekt-formularze React
/////////////////////////////////////////////////////////////////////////////////////////////
class Form extends React.Component {
  state = {
    city: "Lond",
    desc: "test",
    isLike: false,
    number: "0"
  };

  // handleChange = e => {
  //   this.setState({
  //     city: event.target.value
  //   });
  // };

  // handleChangeText = e => {
  //   this.setState({
  //     city_desc: event.target.value
  //   });
  // };

  // handleChangeLike = e => {
  //   this.setState({
  //     isLike: e.target.checked
  //   });
  // };
  // handleChangeNumber(e) {
  //   this.setState({
  //     number: e.target.value
  //   });
  // }

  // OPTYMALIZACJA - POŁĄCZENIE W JEDNĄ METODĘ

  handleChange = e => {
    // console.log(e.target.name);
    console.log(e.target.type);
    if (e.target.type === "checkbox") {
      this.setState({
        [e.target.name]: e.target.checked
      });
    } else {
      this.setState({
        [e.target.name]: e.target.value
      });
    }
  };

  render() {
    return (
      <div>
        <label>
          podaj miasto
          <input
            name="city"
            value={this.state.city}
            onChange={this.handleChange}
            type="text"
          />
        </label>
        <br />
        <label>
          Napisz coś o mieście
          <textarea
            name="desc"
            value={this.state.city_desc}
            onChange={this.handleChange}
          />
        </label>
        <br />
        <label>
          Czy lubisz?{" "}
          <input
            name="isLike"
            type="checkbox"
            checked={this.state.isLoved}
            onChange={this.handleChange}
          />
        </label>
        <br />
        <label>
          ile razy tu byłeś?
          <select
            name="number"
            value={this.state.number}
            onChange={this.handleChange}
          >
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="more">Więcej</option>
          </select>
        </label>
      </div>
    );
  }
}

ReactDOM.render(<Form />, document.getElementById("root"));
