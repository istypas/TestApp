/* Pass the prop "item" */
const PropertyItem = ({ item }) => {
  //console.log(item.property_name);
  return (
    <div className='card'>
      <div className='card-inner'>
        <div className='card-front'>
          <img src={item.img} alt='' />
        </div>
        <div className='card-back'>
          <h1>{item.property_name}</h1>
          <ul>
            <li>
              <strong>Property:</strong> {item.property_name}
            </li>
            <li>
              <strong>Location:</strong> {item.location_name}
            </li>
            <li>
              <strong>Start Date:</strong> {item.start_date}
            </li>
            <li>
              <strong>End Date:</strong> {item.end_date}
            </li>
          </ul>
        </div>
      </div>
    </div>
  )
}

export default PropertyItem
