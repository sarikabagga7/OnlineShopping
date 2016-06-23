package jac.ws.rest.shop.services;

import java.util.Collection;
import java.util.HashMap;

import javax.ws.rs.DELETE;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;

import org.apache.logging.log4j.LogManager;
import org.apache.logging.log4j.Logger;

//simport jac.ws.rest.jaxrs.stock.Stock;

//import jac.ws.rest.jaxrs.stock.Stock;

//import jac.ws.rest.jaxrs.stock.Stock;

//http://localhost:8080/Test2/rest/productservice/products/json/IBM
//rest come from web.xml init parameter check there, stockservice defiened down in annotations, now top on front method write stocks/json/{id}
//key principle of rest, we need to tell our container it should be GET POST PUT DELETE

@Path("/productservice")
public class ProductService {
	Logger logger = LogManager.getLogger(getClass());

	// http://localhost:8080/Test2/rest/productservice/products/json/hw
	@GET
	@Produces(MediaType.APPLICATION_JSON)
	@Path("/products/json/{id}")
	public Product getProduct(@PathParam("id") String productId) {
		String productID = productId.trim().toUpperCase();
		logger.debug("productID=" + productID);
		System.out.print(productID);
		// Stock stock=new Stock("IBM","IBM Corp",10.3);
		Product product = productData.get(productID);
		// if(stock)
		return product;
	}

	// http://localhost:8080/Test2/rest/productservice/products
	// http://localhost:8080/assign2-restfulservices/rest/customerservice/customers/json/71
	@GET
	@Produces(MediaType.APPLICATION_JSON)
	@Path("/products/")
	public Collection<Product> getproducts() {
		logger.debug("List of products.. ");
		logger.debug(productData.values());
		return productData.values();
	}

	public Response deleteStock(String id) // differ in delete stock
	{
		// Stock stock=new Stock("IBM","IBM Corp",10.3);
		return Response.ok().build();
	}

	// curl -i -X PUT -H "Content-Type:application/xml"
	// http://localhost:8080/Test2/rest/productservice/product/hw -d
	// "<Product><description>test</description><price>33.3</price><id>hw</id></Product>"

	@PUT
	@Path("/product/{id}")
	public Response updateProduct(@PathParam("id") String productId, Product product) {

		// user input validation
		Response response = null;
		String productID = productId.trim().toUpperCase();
		if (product.getPrice() < 0 || product.getPrice() > 10000) {
			response = Response.notModified().build();
		}

		else if (product.getDescription() == null || product.getDescription().equals("")) {
			response = Response.notModified().build();
		} else if (!productData.containsKey(productID)) {
			response = Response.notModified().build();
		}

		else {
			productData.put(productID, product);
			response = Response.ok(product).build();
		}

		/*
		 * logger.debug("stockID="+stockID); System.out.print(stockID); //Stock
		 * stock=new Stock("IBM","IBM Corp",10.3); //Stock
		 * stock1=stockData.get(stockID); if(stockData.containsKey(stockID))
		 * stockData.put(stockId, stock);
		 */

		return response;
	}

	@DELETE
	@Path("/product/{id}/")
	public Response deleteProduct(@PathParam("id") String id) {
		logger.debug("----invoking deleteStock for stock " + id);

		Product product = productData.get(id);

		Response response;
		if (product != null) {
			response = Response.ok().build();
			productData.remove(id);
		} else {
			response = Response.notModified().build();
		}
		logger.debug("deleteStock Response =  " + response.getStatusInfo().getStatusCode());
		return response;
	}

	@POST
	@Path("/products/")
	public Response addStock(Product product) {
		Response response;
		logger.debug("----invoking addStock,  " + product);
		// INSERT INTO a DATA BASE

		if (productData.containsKey(product.getId().toUpperCase())) {
			// already there can't create
			response = Response.notModified().build();
		} else {
			productData.put(product.getId().toUpperCase(), product);
			response = Response.ok(product).build();
		}
		logger.debug("addStock Response =  " + response.getStatusInfo().getStatusCode());
		return response;
	}

	static HashMap<String, Product> productData = new HashMap<String, Product>();
	static {
		productData.put("HW", new Product("HW", "Laptops", 100));
		productData.put("SW", new Product("SW", "Oracle", 87.74));
		productData.put("HD", new Product("HD", "HardDrives", 14.08));
	}

}
