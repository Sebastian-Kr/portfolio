const Header = props => {
  const activeItems = props.items.filter(item => item.active);
  console.log(activeItems);
  const number = activeItems.length;

  return (
    <header>
      <h3>Podsumowanie zamówienie: {activeItems.length}</h3>
      <h3>
        {number ? `Płacisz ${number * 10} złotych` : "Nic nie zamówiłes"}{" "}
      </h3>
    </header>
  );
};
