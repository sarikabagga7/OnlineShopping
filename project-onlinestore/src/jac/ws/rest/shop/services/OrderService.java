package jac.ws.rest.shop.services;

import java.util.Collection;
import java.util.HashMap;
import java.util.Map;
import java.util.concurrent.atomic.AtomicInteger;
import java.util.concurrent.atomic.AtomicLong;

import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;
import javax.ws.rs.core.Response.Status;

import org.apache.logging.log4j.LogManager;
import org.apache.logging.log4j.Logger;

@Path("/orderservice/")
@Produces("text/xml")
public class OrderService {
	Logger logger = LogManager.getLogger(getClass());

	// http://localhost:8080/project-onlinestore/rest/orderservice/orders/71
	// curl http://localhost:8080/project-onlinestore/rest/orderservice/orders/71

	@GET
	@Produces(MediaType.APPLICATION_JSON)
	@Path("/orders/{id}/")
	public Order getOrder(@PathParam("id") int orderId) throws Exception {
		logger.debug("orderId =" + orderId);
		Order order = orders.get(orderId);		
		return order;
		
	}

	//curl http://localhost:8080/project-onlinestore/rest/orderservice/orders

	@GET
	@Produces(MediaType.APPLICATION_JSON)
	@Path("/orders/")
	public Collection<Order> getOrders() {
		logger.debug("List of customers.. ");
		return orders.values();
	}

	// curl -i -X PUT -H "Content-Type:application/xml" http://localhost:8080/project-onlinestore/rest/customerservice/customer/71 -d"<Customer><email>abc@gmail.com1</email><id>707</id><name>International Business Machine7</name></Customer>"
	//curl -i -X PUT -H "Content-Type:application/xml" http://localhost:8080/project-onlinestore/rest/orderservice/order/71 -d"<order><orderID>71</orderID><productName>HardDisk</productName><productID>2</productID></order>"

	@PUT
	@Path("/order/{id}")
	public Response updateCustomer(@PathParam("id") int orderId, Order order) {
		// user input validation
		Response response = null;
		if (order.getProductName() == null || order.getProductName().equals("")) {
			response = Response.notModified().build();
			logger.debug("Product Name cannot be null.. ");
		} else if (!orders.containsKey(orderId)) {
			response = Response.notModified().build();
			logger.debug("Order Id does not exist.. ");
		} else {
			orders.put(orderId, order);
			response = Response.ok().build();
			logger.debug("Order updated. ");
		}

		return response;
	}
	
	// curl -i -X DELETE -H "Content-Type:application/xml" http://localhost:8080/project-onlinestore/rest/orderservice/order/71

	@DELETE
	@Path("/order/{id}/")
	public Response deleteOrder(@PathParam("id") long id) {
		logger.debug("----invoking delete customer" + id);
		 Order order = orders.get(id);
		Response response;
		if (order != null) {
			response = Response.ok().build(); // 200
			orders.remove(id);
			logger.debug("Customer deleted.. ");
		} else {
			response = Response.status(Status.NOT_FOUND).build();
			logger.debug("Customer id does not exist.. "); 
		}
		logger.debug("delete Response =  " + response.getStatusInfo().getStatusCode());
		return response;
	}
	
	// curl -i -X POST -H "Content-Type:application/xml" http://localhost:8080/assign2-restfulservices/rest/customerservice/customer/71 -d"<Customer><email>abc@gmail.com1</email><name>Sarika Bagga</name></Customer>"
	//curl -i -X POST -H "Content-Type:application/xml" http://localhost:8080/ws-rest-1/rest/customerservice/customers -d "<Customer><email>amir.pourpanahi@gmail.com</email><id>111</id><name>Amir</name></Customer>"
	// curl -i -X POST -H "Content-Type:application/xml" http://localhost:8080/assign2-restfulservices/rest/customerservice/customers -d"<Customer><email>abc@gmail.com1</email><name>Sarika Bagga</name></Customer>"
	//curl -i -X POST -H "Content-Type:application/xml" http://localhost:8080/project-onlinestore/rest/ordreservice/orders -d"<order><productName>HardDisk</productName><productID>2</productID></order>"
	
	@POST
	@Path("/orders/")
	public Response addOrder(Order order) {
		Response response;
		logger.debug("----invoking addCustomer,  " + order); // INSERT INTOa DATA
															// BASE
		//AtomicLong custid = new AtomicLong(new Long(((Object) customers).lastEntry().getKey()));
		AtomicInteger currentId = new AtomicInteger((int) orders.get(orders.size()).getOrderID());
		int orderid = currentId.incrementAndGet();
		//logger.debug("Customer id generated randomly:" + id);
		long id1 = 71;//only for testing purpose- existing id.
		if (orders.containsKey(orderid)) { // already there can't create
												// response
			response = Response.status(Status.UNAUTHORIZED).build();
			logger.debug("Customer Id already exist.");
		} else {
			order.setOrderID(orderid);
			orders.put(orderid, order);
			response = Response.ok(order).build();
			logger.debug("New Customer added..");
		}
		logger.debug("add customer Response =  " + response.getStatusInfo().getStatusCode());
		return response;
	}

	static HashMap<Integer, Order> orders = new HashMap<Integer, Order>();
	static {
		//orders.put(70, new Order(70, "Laptop", "1"));
		//orders.put(71, new Order(71, "HardDisk","2"));
		//orders.put( 72, new Order(72, "Keyboard", "3"));
		//orders.put( 73, new Order(73, "Desktop", "4"));
		//orders.put( 74, new Order(74, "Mouse", "5"));
	}

}
