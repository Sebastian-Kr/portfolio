const Item = props => {
  return (
    <li
      //   style={props.active ? { fontWeight: "bold" } : { color: "gray" }}
      className={props.active ? "enable" : "disable"}
      onClick={() => props.changeStatus(props.id)}
    >
      {props.name}
    </li>
  );
};
