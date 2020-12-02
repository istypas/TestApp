import { useEffect, useState } from 'react'; //import the 2 hooks
import axios from "axios"; //Use axios to make our hhtp request
import Header from './components/ui/header'; //import the Header component
import PropertyGrid from './components/bookings/PropertyGrid'; //import the PropertyGrid component
import Search from './components/ui/Search'; //import the Search component
import './App.css'; //import the css

const App = () => {
  const [items, setItems] = useState([])
  const [isLoading, setIsLoading] = useState(true)
  //Set the 'query' value using the 'setQuery' method found in <Search />
  const [query, setQuery] = useState('')

  useEffect(() => {
    const fetchItems = async () => {
      const result = await axios (`http://sykesdemo.test/api/properties?property_name=${query}`)
      //const result = await axios (`https://www.breakingbadapi.com/api/characters?name=${query}`)
      console.log(result.data)

      setItems(result.data)
      setIsLoading(false)
    }
    fetchItems() //call it/run it to make the GET request
  }, [query]) //whenever the 'query' dependency is changed, useEffect will fire off again
  
  return (
    <div className='container'>
      <Header />
      {/* Pass the query up from @Search' into App.js */}
      <Search getQuery={(q) => setQuery(q)} />
      <PropertyGrid isLoading = {isLoading} items = {items} />
    </div>
  )
}

export default App;
