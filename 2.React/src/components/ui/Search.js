import { getSuggestedQuery } from '@testing-library/react';
import { useState } from 'react'; //import the useState hook

const Search = ({ getQuery }) => {
    /* Add a piece of state for this input */
    const [text, setText] = useState('')
    const onChange = (q) => {
        setText(q)
        getQuery(q)
    }

    /* Create the 'Search' form */
    /* Every time we type something, it will add it to 'text' */
    return (
      <section className="search">
          <form>
              <input type='text'
              className='form-control'
              placeholder='Search bookings'
              value={text}
              onChange={(e) => onChange(e.target.value)}
              autoFocus />
          </form>
      </section>
    )
  }
  
  export default Search;