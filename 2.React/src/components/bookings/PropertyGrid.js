import PropertyItem from './PropertyItem'
import Spinner from '../ui/Spinner'

const PropertyGrid = ( {items, isLoading} ) => {
    /* Check if loading has finished and loop through the data */
    return (
        isLoading ? (<Spinner />) : (<section className="cards">
            {/* Get the name of every item */}
            {items.map(item => (
                /* Pass the entire item in */
                <PropertyItem key={item.__pk} item={item}></PropertyItem>
            ))}
        </section>)
     )
}
  
export default PropertyGrid;