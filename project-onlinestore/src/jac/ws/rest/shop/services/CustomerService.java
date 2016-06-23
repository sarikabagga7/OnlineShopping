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
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.ResponseBody;

@Path("/customerservice/")
@Produces("text/xml")
public class CustomerService {
	Logger logger = LogManager.getLogger(getClass());
	AtomicInteger currentId = new AtomicInteger();

	// http://localhost:8080/assign2-restfulservices/rest/customerservice/customers/71
	// curl http://localhost:8080/assign2-restfulservices/rest/customerservice/customers/71

	@GET
	@Produces(MediaType.APPLICATION_JSON)
	@Path("/customers/{id}/")
	public Customer getCustomer(@PathParam("id") long custId) throws Exception {
		logger.debug("custId =" + custId);
		Customer cust = customers.get(custId);
		return cust;
	}

	// http://localhost:8080/assign2-restfulservices/rest/customerservice/customers
	// curl http://localhost:8080/assign2-restfulservices/rest/customerservice/customers

	@GET
	@Produces(MediaType.APPLICATION_JSON)
	@Path("/customers/")
	public Collection<Customer> getCustomers() {
		logger.debug("List of customers.. ");
		return customers.values();
	}

	// curl -i -X PUT -H "Content-Type:application/xml" http://localhost:8080/project-onlinestore/rest/customerservice/customer/71 -d"<Customer><address>77-street</address><country>India</country><email>abc@gmail.com</email><lastName>bagga</lastName><name>Peerji</name></Customer>
	
	
	
	@RequestMapping(method = RequestMethod.PUT)
	@PUT
	@Path("/customer/{id}")
	@ResponseBody
	public Response updateCustomer(@PathParam("id") long customerId, Customer cust) {
		// user input validation
		Response response = null;
		if (cust.getEmail() == null || cust.getEmail().equals("")) {
			response = Response.notModified().build();
			logger.debug("Email cannot be null.. ");
		} else if (!customers.containsKey(customerId)) {
			response = Response.notModified().build();
			logger.debug("Customer Id does not exist.. ");
		} else {
			customers.put(customerId, cust);
			response = Response.ok(cust).build();
			logger.debug("Customer updated. ");
		}

		return response;
	}

	// curl -i -X DELETE -H "Content-Type:application/xml" http://localhost:8080/assign2-restfulservices/rest/customerservice/customer/71

	@DELETE
	@Path("/customer/{id}/")
	public Response deleteCustomer(@PathParam("id") long id) {
		logger.debug("----invoking delete customer" + id);
		Customer cust = customers.get(id);
		Response response;
		if (cust != null) {
			response = Response.ok().build(); // 200
			customers.remove(id);
			logger.debug("Customer deleted.. ");
		} else {
			response = Response.status(Status.NOT_FOUND).build();//404
			logger.debug("Customer id does not exist.. "); 
		}
		logger.debug("delete Response =  " + response.getStatusInfo().getStatusCode());
		return response;
	}
	//AtomicLong curID = new AtomicLong(new Long(customers.lastEntry().getKey()));
		
	// curl -i -X POST -H "Content-Type:application/xml" http://localhost:8080/assign2-restfulservices/rest/customerservice/customers -d"<Customer><email>abc@gmail.com1</email><name>Sarika Bagga</name></Customer>"
	//curl -i -X POST -H "Content-Type:application/xml" http://localhost:8080/project-onlinestore/rest/customerservice/customers -d"<Customer><email>abc@gmail.com1</email><name>Sarika Bagga</name></Customer>"
	@POST
	@Path("/customers/")
	public Response addCustomer( Customer cust) {
		Response response;
		logger.debug("----invoking addCustomer,  " + cust); // INSERT INTOa DATA
															// BASE
		//AtomicLong custid = new AtomicLong(new Long(((Object) customers).lastEntry().getKey()));
		//AtomicInteger currentId = new AtomicInteger((int) customers.get(customers.size()).getId());
		long custid = currentId.incrementAndGet();
		logger.debug("Customer id generated randomly:" + custid);
		long id1 = 71;//only for testing purpose- existing id.
		if (customers.containsKey(custid)) { // already there can't create
												// response
			response = Response.status(Status.UNAUTHORIZED).build();
			logger.debug("Customer Id already exist.");
		} else {
			cust.setId(custid);
			customers.put(custid, cust);
			response = Response.ok(cust).build();
			logger.debug("New Customer added..");
		}
		logger.debug("add customer Response =  " + response.getStatusInfo().getStatusCode());
		return response;
	}

	
	// curl http://localhost:8080/project-onlinestore/rest/customerservice/order/customer/70

		@GET
		@Produces(MediaType.APPLICATION_JSON)
		@Path("/order/customer/{id}/")
		public Order getOrder(@PathParam("id") long custId) throws Exception {
			logger.debug("custId =" + custId);
			Order order = orders.get(custId);		
			return order;
			
		}
	
	//http://localhost:8080/project-onlinestore/rest/customerservice/customers/emailused/abc@gmail.com
	
	@GET
	@Produces(MediaType.APPLICATION_JSON)
	@Path("customers/emailused/{email}/")
	public String getEmail(@PathParam("email") String email1) {
		//String productID = productId.trim().toUpperCase();
		logger.debug("email=" + email1);
		System.out.print(email1);
		// Stock stock=new Stock("IBM","IBM Corp",10.3);
		Customer customer;
		String value="test";
		for(int i=0;i<=customers.size();i++)
		{
		//	if(customers.containsValue(customer.setEmail(email1)))
				 
			{
				value = "existing";
			}
				
		}
		// if(stock)
		//System.out.print(customer);
		return value;
	}

	static HashMap<Long, Customer> customers = new HashMap<Long, Customer>();
	static {
		/*customers.put((long) 70, new Customer(70, "Peerji", "abc@gmail.com"));
		customers.put((long) 71, new Customer(71, "Sarika", "xyz@gmail.com"));
		customers.put((long) 72, new Customer(72, "Aakash", "123@gmail.com"));
		customers.put((long) 73, new Customer(73, "Anuradha", "anu@gmail.com"));
		customers.put((long) 74, new Customer(74, "Gulshan", "gulu@gmail.com"));*/
		customers.put((long) 70, new Customer(70, "Peerji", "abc@gmail.com","bagga","77-street","India"));
	}
	
	static HashMap<Long, Order> orders = new HashMap<Long, Order>();
	static {		
		orders.put((long) 70, new Order(101, "Laptop Purchased","AAAA-1", "24-05-2016",70,"Laptop"));
		orders.put((long) 71, new Order(102, "Desktop Purchased","AAAA-2", "25-05-2016",71,"Laptop"));
	}

}

