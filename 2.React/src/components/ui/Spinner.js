import spinner from '../../img/spinner.gif'

const Spinner = ( {items, isLoading} ) => {
    /* Check if loading has finished and loop through the data */
    return (
        <img src={spinner} style={{ width:'200px', margin: 'auto', display: 'block' }}
            alt='Loading...'
        />
    )
  }
  
  export default Spinner;