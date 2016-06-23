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

//http://localhost:8080/project-onlinestore/index.html


@Path("/customerservice/")
@Produces("text/xml")
public class CustomerService1 {
	Logger logger = LogManager.getLogger(getClass());
	AtomicInteger currentId = new AtomicInteger();

	// http://localhost:8080/project-onlinestore/rest/customerservice/customers/71
	// curl http://localhost:8080/project-onlinestore/rest/customerservice/customers/71

	@GET
	@Produces(MediaType.APPLICATION_JSON)
	@Path("/customers/{id}/")
	public Customer1 getCustomer(@PathParam("id") long custId) throws Exception {
		logger.debug("custId =" + custId);
		Customer1 cust = customers.get(custId);
		return cust;
	}

	// http://localhost:8080/project-onlinestore/rest/customerservice/customers
	// curl http://localhost:8080/project-onlinestore/rest/customerservice/customers

	@GET
	@Produces(MediaType.APPLICATION_JSON)
	@Path("/customers/")
	public Collection<Customer1> getCustomers() {
		logger.debug("List of customers.. ");
		return customers.values();
	}

	// curl -i -X PUT -H "Content-Type:application/xml" http://localhost:8080/project-onlinestore/rest/customerservice/customer/71 -d"<Customer><email>abc@gmail.com1</email><id>71</id><name>International Business Machine7</name></Customer>

	@PUT
	@Path("/customer/{id}")
	public Response updateCustomer(@PathParam("id") long customerId, Customer1 cust) {
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

	// curl -i -X DELETE -H "Content-Type:application/xml" http://localhost:8080/project-onlinestore/rest/customerservice/customer/71

	@DELETE
	@Path("/customer/{id}/")
	public Response deleteCustomer(@PathParam("id") long id) {
		logger.debug("----invoking delete customer" + id);
		Customer1 cust = customers.get(id);
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
		
	// curl -i -X POST -H "Content-Type:application/xml" http://localhost:8080/project-onlinestores/rest/customerservice/customers -d"<Customer><email>abc@gmail.com1</email><name>Sarika Bagga</name></Customer>"
	@POST
	@Path("/customers/")
	public Response addCustomer( Customer1 cust) {
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

	static HashMap<Long, Customer1> customers = new HashMap<Long, Customer1>();
	static {
	/*	customers.put((long) 70, new Customer1(70, "Peerji", "abc@gmail.com"));
		customers.put((long) 71, new Customer1(71, "Sarika", "xyz@gmail.com"));
		customers.put((long) 72, new Customer1(72, "Aakash", "123@gmail.com"));
		customers.put((long) 73, new Customer1(73, "Anuradha", "anu@gmail.com"));
		customers.put((long) 74, new Customer1(74, "Gulshan", "gulu@gmail.com"));
		*/
	}

}
