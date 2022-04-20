const cool = {
    firstName: 'Dante',
    lastName: 'Cand'
}

function formatName(cool) {
    return cool.firstName + ' ' + cool.lastName;
  }


  function getGreeting(cool) {
    if (cool) {
      return <h1>Hello, {formatName(cool)}!</h1>;
    }
    return <h1>Hello, Stranger.</h1>;
  }