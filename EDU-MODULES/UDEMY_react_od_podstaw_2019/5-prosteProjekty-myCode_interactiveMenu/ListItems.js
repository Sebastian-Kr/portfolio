const ListItems = props => {
  const items = props.items.map(item => (
    <Item
      key={item.id}
      id={item.id}
      name={item.content}
      active={item.active}
      changeStatus={props.changeStatus}
    />
  ));

  console.log(items);

  return (
    <div>
      <h2>Zamówienie:</h2>
      <ul>{items}</ul>
    </div>
  );
};
